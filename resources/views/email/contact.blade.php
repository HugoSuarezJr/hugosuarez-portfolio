<h3>You have a contact request!</h3>
<table>
    <tr>
        <th>Name:</th>
        <td>{{ $name }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><a href="mailto:{{ $email }}" target="_blank">{{ $email }}</a></td>
    </tr>
</table>

<div>
    <h4 style="text-decoration-line: underline; margin-bottom: 2px;">Message:</h4>
    <p style="font-size: 20px; font-style: italic; margin-top: 0px;">{{ $body }}</p>
</div>
