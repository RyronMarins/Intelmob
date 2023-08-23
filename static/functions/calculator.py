import pandas as pd

def classify_data_types(file_path):
    # Ler o arquivo .xlsx
    df = pd.read_excel(file_path)

    # Interpretar os tipos de dados
    data_types = df.dtypes

    # Classificar as colunas por tipos de dados
    classified_columns = {}
    for column, data_type in data_types.items():
        if data_type not in classified_columns:
            classified_columns[data_type] = [column]
        else:
            classified_columns[data_type].append(column)

    return classified_columns

# Testar a função
file_path = "seu_arquivo.xlsx"  # Substitua pelo caminho do seu arquivo
print(classify_data_types(file_path))
