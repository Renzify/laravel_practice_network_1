<x-layout>
  <h2>Currently Available Members</h2>
  
  <ul>
    @foreach ($members as $member)
        <li>
          <x-card href="{{ route('member.show', $member->id) }}" :highlight="$member->skill > 70">
            <h3>{{ $member->name }}</h3>
          </x-card>
        </li>
    @endforeach
  </ul>

  {{ $members->links('pagination::tailwind') }}
</x-layout>