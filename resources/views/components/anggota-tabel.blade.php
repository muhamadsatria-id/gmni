@php
    $members = [
        ['name' => 'Aulia Rahman', 'komisariat' => 'UMMI', 'role' => 'Ketua Basis', 'status' => 'Aktif', 'initials' => 'AR', 'filter' => 'aktif'],
        ['name' => 'Nadia Safitri', 'komisariat' => 'Nusa Putra', 'role' => 'Sekretaris', 'status' => 'Aktif', 'initials' => 'NS', 'filter' => 'aktif'],
        ['name' => 'Bagas Pratama', 'komisariat' => 'STIE PGRI', 'role' => 'Anggota', 'status' => 'Aktif', 'initials' => 'BP', 'filter' => 'aktif'],
        ['name' => 'Sinta Maharani', 'komisariat' => 'STH Pasundan', 'role' => 'Alumni', 'status' => 'Alumni', 'initials' => 'SM', 'filter' => 'alumni'],
        ['name' => 'Rizky Ananda', 'komisariat' => 'UBSI', 'role' => 'Alumni', 'status' => 'Alumni', 'initials' => 'RA', 'filter' => 'alumni'],
    ];
@endphp

<div class="overflow-x-auto rounded-sm border border-line bg-white">
    <table class="w-full min-w-[720px] border-collapse text-left">
        <thead>
            <tr class="bg-ink text-[11px] font-bold uppercase tracking-wide text-white">
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">Komisariat</th>
                <th class="px-4 py-3">Peran</th>
                <th class="px-4 py-3">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr data-filter-item data-filter="{{ $member['filter'] }}" data-search-item class="hover:bg-paper/60">
                    <x-row-anggota :name="$member['name']" :komisariat="$member['komisariat']" :role="$member['role']" :status="$member['status']" :initials="$member['initials']" />
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
