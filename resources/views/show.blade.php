@extends('templates.template')

@section('title', 'Tayouza Survey')

@section('content')

<div class="container">
    <div class="text-center py-2">
        <h2>{{$survey->title}}</h2>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-wrap">
        <p>Criado em: {{date('d/m/Y H:i', strtotime($survey->created_at))}}</p>
        <p>Termina em: {{date('d/m/Y H:i', strtotime($survey->ended_at))}}</p>
    </div>
    <div class="flex flex-column justify-content-center align-items-center">
        <form action="" class="d-flex flex-column align-items-center justify-content-center">
            @csrf
            <table class="table-survey">
                <tbody>
                    @foreach($answers as $answer)
                    <tr>
                        <td>
                            <span>{{$answer}}</span>
                        </td>
                        <td>
                            <input type="radio" name="answer">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>

@endsection