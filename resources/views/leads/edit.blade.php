<!DOCTYPE html>
<html>
<head>
    <title>Edit Lead</title>
</head>
<body>

    <h1>Edit Lead</h1>

    <form method="post" action="{{ route('leads.update', $lead->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $lead->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $lead->email }}" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $lead->phone }}">

        <button type="submit">Update Lead</button>
    </form>

</body>
</html>
