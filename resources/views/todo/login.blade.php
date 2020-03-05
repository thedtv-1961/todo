<form action="{{ route('post.login') }}" method="post">
    @csrf
    @error('error')
    {{ $message }}
    @enderror
    <div></div>
    <table>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Login</button>
            </td>
        </tr>
    </table>
</form>
