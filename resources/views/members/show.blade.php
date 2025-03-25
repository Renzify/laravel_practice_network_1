<x-layout>
  <h2>{{ $member->name }}</h2>

  <div class ="bg-gray-200 p-4 rounded">
    <p><strong>Skill Level:</strong>{{$member->skill}}</p>
    <p><strong>About me:</strong></p>
    <p>{{$member->bio}}</p>
  </div>
</x-layout>