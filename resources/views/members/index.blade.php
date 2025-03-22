<x-layout>
  <h2>Currently Available Members</h2>
  
  @if($greeting == "Hi!")
    <p>Hi!</p>
  @endif

  <ul>
    @foreach ($members as $member)
        <li>
          <h2>{{$member['name']}}</h2>
          <a href="/members/{{$member['id']}}">View Details</a>
        </li>
    @endforeach
  </ul>
</x-layout>