Index Page with Sign In / Login Form

<h2>Welcome to the User Logins App</h2>
<p>Please sign in to access your account.</p>
<form action="{{ route('user-logins.login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Sign In</button>
</form>

<p>Don't have an account? Register here</a>.</p>
<h2>Sign Up Form</h2>
<form action="{{ route('user-logins.register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Register</button>
</form>
<br />

