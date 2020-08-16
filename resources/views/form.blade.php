<form action="#" method="post">
    @csrf
    <input name="error" /><br>
    <input name="message" /><br>
    <input name="username" value="<?= old('username', 'Default username instructions here'); ?>" >
    <Br><button type="submit">SEND</button>
</form>
