@props(['name' => 'Nama kader', 'komisariat' => 'Komisariat', 'role' => 'Anggota', 'status' => 'Aktif', 'initials' => 'GN'])

<tr class="border-t border-line bg-white text-sm">
    <td class="px-4 py-3">
        <div class="flex items-center gap-3">
            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-sm bg-ink text-[11px] font-bold text-brand">{{ $initials }}</span>
            <span class="font-bold text-ink">{{ $name }}</span>
        </div>
    </td>
    <td class="px-4 py-3 text-muted">{{ $komisariat }}</td>
    <td class="px-4 py-3 text-muted">{{ $role }}</td>
    <td class="px-4 py-3">
        <span class="inline-flex rounded-sm px-2 py-1 text-[11px] font-bold {{ $status === 'Aktif' ? 'bg-paper text-ink' : 'bg-ink text-white' }}">
            {{ $status }}
        </span>
    </td>
</tr>
