<form action="{{ route('login.submit') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Submit">
</form>