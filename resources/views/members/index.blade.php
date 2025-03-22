<x-layout>
  <h2>Currently Available Members</h2>
  
  @if($greeting == "Hi!")
    <p>Hi!</p>
  @endif

  <ul>
    @foreach ($members as $member)
        <li>
          <x-card href="/members/{{$member['id']}}" :highlight="$member['skill'] > 70">
            <h3>{{ $member['name'] }}</h3>
          </x-card>
        </li>
    @endforeach
  </ul>
</x-layout>