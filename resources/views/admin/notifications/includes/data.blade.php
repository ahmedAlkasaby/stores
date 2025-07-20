<tr>
    <td class="text-lg-center">{{ $notification->user->name }}</td>
    <td class="text-lg-center">{{ $notification->user->email }}</td>
    <td class="text-lg-center">{{ $notification->nameLang() }}</td>
    <td class="text-lg-center">{{ $notification->descriptionLang() }}</td>
    <td class="text-lg-center">{{ formatDate($notification->created_at) }}</td>
    <td class="text-lg-center">{{ formatDate($notification->formatDate) }}</td>
</tr>


