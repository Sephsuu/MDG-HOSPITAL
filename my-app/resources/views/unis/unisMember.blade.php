<div>
    <form action="{{ route('weUnis.update', $unis['id']) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="{{ $unis['name'] }}">
        <input type="text" name="email" placeholder="{{ $unis['email'] }}">
        <input type="text" name="age" placeholder="{{ $unis['age'] }}">
        <input type="text" name="nationality" placeholder="{{ $unis['nationality'] }}">
        <input type="submit">
    </form>
    <a href="{{ url()->previous() }}">Back</a>
</div>