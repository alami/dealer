<form action="{{ url('/update/'.$dealer->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label>Наименование юридического лица</label>
        <input value="{{ $dealer->businessName }}" name="businessName" type="text" class="form-control" placeholder="Введите наименование юридического лица">
    </div>
    <div class="form-group">
        <label>Регион</label>
        <input name="region" value="{{ $dealer->region }}" type="text" class="form-control" placeholder="Введите Регион">
    </div>
    <div class="form-group">
        <label>Адрес(наименование вилоята)</label>
        <input name="address" value="{{ $dealer->address }}" type="text" class="form-control" placeholder="Введите наименование вилоята">
    </div>
    <div class="form-group">
        <label>Адрес(наименование района, города)</label>
        <input name="address1" value="{{ $dealer->address1 }}" type="text" class="form-control" placeholder="Введите наименование района, города">
    </div>
    <div class="form-group">
        <label>Общая площадь заявленного пункта продаж в кв.м.</label>
        <input name="square" value="{{ $dealer->square }}" type="text" class="form-control" placeholder="Введите наименование района, города">
    </div>
    <div class="form-group">
        <label>Контактный телефон заявителя</label>
        <input name="phone" value="{{ $dealer->phone }}" type="text" class="form-control" placeholder="Введите контактный телефон заявителя">
    </div>
    <div class="form-group">
        <label>Адрес электронной почты заявителя</label>
        <input name="email" value="{{ $dealer->email }}" type="text" class="form-control" placeholder="Введите Адрес электронной почты заявителя">
    </div>
    <input type="submit" class="btn btn-info" value="Обновить">
    <input type="reset" class="btn btn-warning" value="Сбросить">
</form>
