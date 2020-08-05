<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Наименование юридического лица</th>
        <th scope="col">Регион</th>
        <th scope="col">Адрес(наименование вилоята)</th>
        <th scope="col">(наименование района, города)</th>
        <th scope="col">Общая площадь заявленного пункта продаж в кв.м.</th>
        <th scope="col">Контактный телефон заявителя</th>
        <th scope="col">Адрес электронной почты заявителя</th>
        <th scope="col">Slug</th>
        <th scope="col">Статус</th>
        <th scope="col">_______Действия______</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dealers as $dealer)
    <tr>
        <td>{{ $dealer->businessName }}</td>
        <td>{{ $dealer->region }}</td>
        <td>{{ $dealer->address }}</td>
        <td>{{ $dealer->address1 }}</td>
        <td>{{ $dealer->square }}</td>
        <td>{{ $dealer->phone }}</td>
        <td>{{ $dealer->email }}</td>
        <td>{{ $dealer->slug }}</td>
        <td>{{ $dealer->status }}</td>
        <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
            <a href="{{ url('/edit'.$dealer->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="#" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
