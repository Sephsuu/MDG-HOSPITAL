<form action="{{ route('signup.submit') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="fname" placeholder="First Name">
    <input type="text" name="lname" placeholder="Last Name">
    <input type="password" name="password1" placeholder="Password">
    <input type="password" name="password2" placeholder="Re-type Password">
    <input type="submit">
</form>