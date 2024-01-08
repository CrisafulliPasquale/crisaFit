


<form method="POST" action="../backend/pagamentoController.php">
    <label for="numero_carta">Numero Carta:</label>
    <input type="text" name="numero_carta" id="numero_carta" required>

    <label for="scadenza_carta">Scadenza Carta:</label>
    <input type="text" name="scadenza_carta" id="scadenza_carta" required>

    <label for="cvv_carta">CVV Carta:</label>
    <input type="text" name="cvv_carta" id="cvv_carta" required>

    <button type="submit">Paga</button>
</form>
