@extends('landing.layout')
@section('content')


<div class="row mt-5">
    @foreach(['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'] as $month)
    <div class="col-md-6 mb-5">
        <div class="card">
            <div class="card-body ">
                <b class="text-primary">{{ ucfirst($month) }}</b>
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Agenda</th>
                        </tr>
                    </thead>
                    @foreach(${'list_' . $month} as $item)
                        <tr>
                            <td>{{$item->tanggal}}</td>
                            <td>{{ucwords($item->nama_agenda)}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endforeach
        </div>

@endsection