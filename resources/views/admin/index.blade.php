@extends('layouts.admin')

@section('content')
<form method="GET" action="/admin" style="padding: 15px">
    <div class="row">
        <div class="col">
            <datepicker date-format="dd.MM.yyyy" date-set="datetime.date" class="datapicker-toggle" datepicker-append-to="body">
                <input placeholder="Дата"
                       class="form-control"
                       type="text"
                       name="flightAt"
                       ng-model="$ctrl.fields.flightAt">
            </datepicker>
        </div>
        <div class="col">
            <input id="countryId"
                   type="hidden"
                   name="countryId"/>
            <input id="flightFormFrom"
                   placeholder="Откуда"
                   class="form-control"
                   ng-model="$ctrl.fields.countryId"
                   auto-complete-country-directive/>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-warning">Искать</button>
        </div>
    </div>
</form>

<table class="table">
    <thead class="thead-inverse">
    <tr>
        <th>ID</th>
        <th>Фото</th>
        <th>Имя</th>
        <th>Группа</th>
        <th>Дата</th>
        <th>Время</th>
        <th>Откуда</th>
        <th>Куда</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($flights as $flight)
    <tr>
        <th scope="row">{{ $flight->id }}</th>
        <th scope="row"><img src="{{ $flight->user->getAvatarUrl() }}" width="50" class="rounded-circle"></th>
        <td>{{ $flight->user->name }}</td>
        <td>{{ $flight->user->group }}</td>
        <td>{{ $flight->flightAtDate }}</td>
        <td>{{ $flight->flightAtTime }}</td>
        <td>{{ $flight->fromCity->name }}</td>
        <td>{{ $flight->toCity->name }}</td>
        <td><a href="/admin/delete/{{ $flight->id }}">Удалить</a></td>
    </tr>
    @endforeach
    </tbody>
</table>

{{ $flights->render() }}
@endsection
