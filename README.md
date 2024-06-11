# Cifra de César em PHP

Este projeto implementa a Cifra de César, um tipo de cifra de substituição na qual cada letra no texto é substituída por outra letra que se encontra um número fixo de posições (deslocamento) à frente no alfabeto. Por exemplo, com um deslocamento de 3, "A" seria substituído por "D", "B" se tornaria "E", e assim por diante.

## Funcionalidades

- **Codificar Mensagens**: Permite ao usuário codificar mensagens usando um deslocamento específico.
- **Decodificar Mensagens**: Permite ao usuário decodificar mensagens previamente codificadas, assumindo que o deslocamento utilizado é conhecido.

## Como Usar

1. Clone o repositório para sua máquina local.
2. Abra um terminal e navegue até o diretório do projeto.
3. Execute o script com o comando `php Cifra.php`.
4. Siga as instruções no terminal para codificar ou decodificar uma mensagem.

### Codificando uma Mensagem

1. Quando solicitado, digite a mensagem original que você deseja codificar.
2. Escolha a opção `1` para codificar uma nova mensagem.
3. Insira o valor de deslocamento (número de posições).
4. A mensagem codificada será exibida.

### Decodificando uma Mensagem

1. Quando solicitado, digite a mensagem codificada que você deseja decodificar.
2. Escolha a opção `2` para decodificar uma mensagem codificada.
3. Insira o valor de deslocamento usado para codificar a mensagem.
4. A mensagem decodificada será exibida.

## Requisitos

- PHP 7.0 ou superior.

