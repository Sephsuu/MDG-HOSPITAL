<div>
    <form action="{{ route('add.submit') }}" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>E-mail</label>
        <input type="email" name="email">
        <label>Nationality</label>
        <input type="text" name="nationality">
        <label>Age</label>
        <input type="text" name="age">
        <input type="submit">
    </form>
</div>