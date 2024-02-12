# Retro Açaí - Catálogo e Gerenciamento de Banco de Dados

Este é um projeto de site web da empresa fictícia Retrô Açaí envolvendo front-end, back-end e banco de dados MySQL feito com base no curso "PHP e MySQL: criando sua primeira aplicação web" da plataforma Alura. 

No sistema é possível através do arquivo "index.php", a página inicial, visualizar toda a lista de produtos catalogados no banco de dados da Retrô Açaí, separados pelas categorias de Açaí e Sorvete.

Através do arquivo "admin.php", que representa a página administrativa, podemos acessar as demais funções do sistema:
- Visualização de todos os produtos do banco de dados;
- Botão para exclusão de cada um dos produtos;
- Botão para edição e atualização dos produtos;
- Botão para baixar relatório PDF com a lista dos produtos sendo exibidos na página admin.php.

O sistema tem algumas particularidades, como no cadastro de produtos, onde todas as informações são obrigatórias, exceto a inclusão de uma imagem para o produto, que é opcional. É adicionada uma imagem (logo da empresa) automaticamente caso o usuário não adicione alguma imagem manualmente. Além disso, tanto na página index.php quanto na página admin.php, os produtos são ordenados pelo preço do produto, de maneira crescente.

Para o relatório PDF, foi utilizado o pacote DomPDF através do Composer. Também disponibilizei o arquivo do banco da dados já com alguns dados adicionados, sendo apenas necessário a inclusão desse arquivo através de um SGBD, como o MySQL Workbench por exemplo (no qual eu utilizei).