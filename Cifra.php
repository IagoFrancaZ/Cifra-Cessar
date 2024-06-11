<?php

function codificar($mensagem, $deslocamento) {
    $mensagemCodificada = '';

    $tamanhoMensagem = strlen($mensagem);

    for ($i = 0; $i < $tamanhoMensagem; $i++) {
        $caractere = $mensagem[$i];

        if (ctype_alpha($caractere)) {
            $codigoAscii = ord($caractere);
            $ehMaiuscula = ctype_upper($caractere);

            $novoCodigoAscii = ($codigoAscii + $deslocamento - ($ehMaiuscula ? 65 : 97)) % 26 + ($ehMaiuscula ? 65 : 97);

            $mensagemCodificada .= chr($novoCodigoAscii);
        } else {
            $mensagemCodificada .= $caractere;
        }
    }

    return $mensagemCodificada;
}

function decodificar($mensagemCodificada, $deslocamento) {
    $deslocamentoReverso = 26 - $deslocamento;

    return codificar($mensagemCodificada, $deslocamentoReverso);
}

echo "Bem-vindos à Cifra de César!\n";

// Solicita a mensagem original
echo "Digite a mensagem original para codificar: ";
$mensagemOriginal = fgets(STDIN);
$mensagemOriginal = trim($mensagemOriginal);

echo "Escolha uma operação:\n";
echo "1. Codificar uma nova mensagem\n";
echo "2. Decodificar uma mensagem codificada\n";
echo "Opção: ";
$escolhaUsuario = fgets(STDIN);
$escolhaUsuario = trim($escolhaUsuario);

if ($escolhaUsuario === "1") {
    echo "Digite o valor de deslocamento (número de posições para codificar): ";
    $deslocamento = fgets(STDIN);
    $deslocamento = trim($deslocamento);
    $deslocamento = (int) $deslocamento;

    $mensagemCodificada = codificar($mensagemOriginal, $deslocamento);
    echo "Mensagem codificada: " . $mensagemCodificada . "\n";
} elseif ($escolhaUsuario === "2") {
    echo "Digite a mensagem codificada para decodificar: ";
    $mensagemCodificada = fgets(STDIN);
    $mensagemCodificada = trim($mensagemCodificada);

    echo "Digite o valor de deslocamento usado para codificar (número de posições): ";
    $deslocamento = fgets(STDIN);
    $deslocamento = trim($deslocamento);
    $deslocamento = (int) $deslocamento;

    $mensagemDecodificada = decodificar($mensagemCodificada, $deslocamento);
    echo "Mensagem decodificada: " . $mensagemDecodificada . "\n";
} else {
    echo "Opção inválida. Por favor, tente novamente.\n";
}
?>