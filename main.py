# Importando as bibliotecas necessárias
import os
import traceback

from flask import Flask, request, jsonify, render_template
from flask_cors import CORS
from openpyxl import load_workbook
from flask_sqlalchemy import SQLAlchemy
from sqlalchemy import func

# Inicialização da aplicação Flask
app = Flask(__name__, template_folder='templates', static_folder='static')
app.debug = True  # Ativa o modo de depuração
# Configure CORS para permitir solicitações de origens específicas
CORS(app, origins=["http://localhost:9999"])

# Configuração do banco de dados SQLAlchemy
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql+pymysql://usr_dev_3:rHBmUibpQ8E42HV@localhost/dev_imob'
db = SQLAlchemy(app)

# Definição da classe Viability para mapear a tabela 'viability' no banco de dadosa
class Viability(db.Model): 
    id = db.Column(db.Integer, primary_key=True)
    user_id = db.Column(db.Integer)
    areaTotal = db.Column(db.Float)
    precoTerreno = db.Column(db.Float)
    custoConstrucao = db.Column(db.Float)
    precoMedio = db.Column(db.Float)
    areaConstruida = db.Column(db.Float)
    precoMedioSugerido = db.Column(db.Float)
    quantidadeUnidades = db.Column(db.Integer)
    enderecoCompleto = db.Column(db.String(255))
    tipo = db.Column(db.String(50))
    haPermutaFisica = db.Column(db.Boolean)
    haPermutaFinanceira = db.Column(db.Boolean)
    email = db.Column(db.String(255), unique=True, nullable=False)

# Definição da classe Users para mapear a tabela 'users' no banco de dados
class Users(db.Model): 
    userID = db.Column(db.Integer, primary_key=True)
    password = db.Column(db.String(60))
    passwordLastUpdate = db.Column(db.DateTime)
    email = db.Column(db.String(255), unique=True, nullable=False)
    phone = db.Column(db.String(255))
    activationToken = db.Column(db.String(255))
    activationExpiry = db.Column(db.DateTime)
    activatedAt = db.Column(db.DateTime)
    active = db.Column(db.String(255), default='Yes')
    resetToken = db.Column(db.String(255))
    resetComplete = db.Column(db.String(3), default='No')
    name = db.Column(db.String(255), nullable=False)
    photo = db.Column(db.String(255))
    institution = db.Column(db.String(255))
    country = db.Column(db.String(255))
    timezone = db.Column(db.String(125), default='America/Sao_Paulo')
    localeID = db.Column(db.Integer, default=2)
    allowmarketing = db.Column(db.Integer, nullable=False, default=1)
    registry_date = db.Column(db.DateTime, nullable=False, server_default='current_timestamp()')
    isManager = db.Column(db.Integer, default=0)

@app.route('/')
def index():
    return render_template('new-viability-study.php')

# Rota para inserir dados na tabela 'viability'
@app.route('/api/insere_dados', methods=['POST'])
def insere_dados():
    try:
        data = request.json

        # Validação dos dados recebidos
        required_fields = [
            'areaTotal', 'precoTerreno', 'custoConstrucao', 'precoMedio',
            'areaConstruida', 'precoMedioSugerido',
            'quantidadeUnidades', 'email'
        ]
        for field in required_fields:
            if field not in data:
                return jsonify({'error': f'Dados inválidos. Certifique-se de enviar o campo {field}.'}), 400

        planilha_caminho = r'C:\xampp\htdocs\intelmob\sheets\Planilha.xlsx'

        # Lendo a planilha existente
        try:
            wb = load_workbook(filename=planilha_caminho)
            sheet = wb.active
        except Exception as e:
            return jsonify({'error': 'Erro ao ler a planilha.', 'message': str(e)}), 500

        # Inserir os dados nas células específicas na planilha
        try:
            sheet['O17'].value = data['areaTotal']
            sheet['W18'].value = data['precoTerreno']
            sheet['O14'].value = data['custoConstrucao']
            sheet['K15'].value = data['precoMedio']
            sheet['G13'].value = (int(data['areaConstruida']) * int(data['areaTotal'])) / 6599
            sheet['G11'].value = data['precoMedioSugerido']
            sheet['O11'].value = data['quantidadeUnidades']
            wb.save(filename=planilha_caminho)
        except Exception as e:
            return jsonify({'error': 'Erro ao inserir os dados na planilha.', 'message': str(e)}), 404

        # Obtendo userID da tabela Users
        try:
            email = data['email']
            user = Users.query.filter_by(email=email).first()
            if not user:
                return jsonify({'error': 'Usuário não encontrado.'}), 400
            user_id = user.userID
        except Exception as e:
            print(traceback.format_exc())
            return jsonify({'error': 'Erro ao recuperar o usuário.', 'message': str(e)}), 500

        # Inserir dados na tabela de viabilidade
        try:
            viability = Viability(user_id=user_id, areaTotal=data['areaTotal'], precoTerreno=data['precoTerreno'],
                                  custoConstrucao=data['custoConstrucao'], precoMedio=data['precoMedio'],
                                  areaConstruida=data['areaConstruida'], precoMedioSugerido=data['precoMedioSugerido'],
                                  quantidadeUnidades=data['quantidadeUnidades'], email=data['email'])
            db.session.add(viability)
            db.session.commit()
        except Exception as e:
            print(traceback.format_exc())
            db.session.rollback()  # Reverter transação em caso de falha
            return jsonify({'error': 'Erro ao inserir os dados na base de dados.', 'message': str(e)}), 500

        return jsonify({'success': 'Dados inseridos com sucesso!'})

    except Exception as e:
        return jsonify({'error': 'Erro interno.', 'message': str(e)}), 500

# Execução da aplicação Flask
if __name__ == '__main__':
    port = int(os.environ.get("PORT", 9999))
    app.run(host="0.0.0.0", port=port)
