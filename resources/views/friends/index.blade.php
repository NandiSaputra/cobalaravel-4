@extends('layouts.app')

@section('title', 'Friends')

@section('content')
    @foreach ($friends as $friend)

        <div class="card" style="width: 18rem;">
            <h5 class="card-header"><a href="/friends/{{ $friend['id'] }}"
                    style="color:black">{{ $friend['nama'] }}</a></h5>
            <div class="card-body">
                <p class="card-text"><b>UMUR :</b>{{ $friend['umur'] }}</p>
                <p class="card-text"><b>NO TLP :</b>{{ $friend['no_tlp'] }}</p>
                <p class="card-text"><b>ALAMAT :</b>{{ $friend['alamat'] }}</p>
                <p class="card-text"><b>HOBI :</b>{{ $friend['hobi'] }}</p>
                <form action="/friends/{{ $friend['id'] }}" method="POSt">
                    <a href="/friends/{{ $friend['id'] }}/edit" class="btn btn-warning">Edit Teman</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete Teman</button>
                </form>
            </div>
        </div>

    @endforeach
    <div>
        {{ $friends->links() }}
    </div>
@endsection
