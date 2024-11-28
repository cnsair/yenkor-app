<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Messages</title>
</head>
<body>
    <h1>Guest Messages</h1>

    @if($messages->isEmpty())
        <p>No messages yet.</p>
    @else
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
