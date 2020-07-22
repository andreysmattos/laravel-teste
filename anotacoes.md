# Nomes

## Model

- Singular
- Primeira Letra Maiuscula
- Exemplos:
- - Country
  - User
  - News
  - UsefullLinkUsefullLink

## Tabelas

- Plural
- Snake_case
- Tudo minusculo
- Exemplos
- - access
  - addresses
  - banners
  - cities
  - professional_experiences

Em caso de relacionamento *MUITOS PARA MUITOS* a tabela pivo deverá seguir o seguinte padrão:

- padrão é nome das tabelas no *singular* e em *ordem alfabética*
- Exemplos:
- - position_vacancy
- - shift_vacancy

### Chave Estrangeira

- Deve ser o nome da tabela no *singular* + _id
- Tudo em minusculo
- Exemplos
- - shift_id
  - vacancy_id
  - education_id
