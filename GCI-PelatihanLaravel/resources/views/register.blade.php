<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Register Page</h1>
    <form style="display: flex;flex-direction: column;""{{ url('/register') }}" method="POST">
        @csrf
        <label style="margin-bottom: 5px;font-weight: bold;""first_name">First Name:</label>
        <input style="padding: 10px;margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px;""text" id="first_name" name="first_name" required><br>

        <label style="margin-bottom: 5px;font-weight: bold;" for="last_name">Last Name:</label>
        <input style="padding: 10px;margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; type="text" id="last_name" name="last_name" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
