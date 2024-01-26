<!DOCTYPE html>
<html>
<head>
    <title>Show Lead</title>
</head>
<body>

    <h1>Lead Details</h1>
    
    <p><strong>ID:</strong> {{ $lead->id }}</p>
    <p><strong>Name:</strong> {{ $lead->name }}</p>
    <p><strong>Email:</strong> {{ $lead->email }}</p>
    <p><strong>Phone:</strong> {{ $lead->phone }}</p>
    <p><strong>Score:</strong> {{ $lead->score }}</p>

    <a href="{{ route('leads.edit', $lead->id) }}">Edit Lead</a>

</body>
</html>
