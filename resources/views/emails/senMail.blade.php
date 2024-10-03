<x-mail::message>
# New Message

Hello,

You have received a new message from your portfolio website. Here are the details:

- **Name:** {{ $data['name'] }}
- **Email:** {{ $data['email'] }}
- **Mesage:** {{ $data['message'] }}

Please get in touch with the client to follow up.


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
