<form action="{{ url('/store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Наименование юридического лица</label>
        <input name="businessName" type="text" class="form-control" placeholder="Введите наименование юридического лица">
    </div>
    <div class="form-group">
        <label>Регион</label>
        <input name="region" type="text" class="form-control" placeholder="Введите Регион">
    </div>
    <div class="form-group">
        <label>Адрес(наименование вилоята)</label>
        <input name="address" type="text" class="form-control" placeholder="Введите наименование вилоята">
    </div>
    <div class="form-group">
        <label>Адрес(наименование района, города)</label>
        <input name="address1" type="text" class="form-control" placeholder="Введите наименование района, города">
    </div>
    <div class="form-group">
        <label>Общая площадь заявленного пункта продаж в кв.м.</label>
        <input name="square" type="text" class="form-control" placeholder="Введите наименование района, города">
    </div>
    <div class="form-group">
        <label>Контактный телефон заявителя</label>
        <input name="phone" type="text" class="form-control" placeholder="Введите контактный телефон заявителя">
    </div>
    <div class="form-group">
        <label>Адрес электронной почты заявителя</label>
        <input name="email" type="text" class="form-control" placeholder="Введите Адрес электронной почты заявителя">
    </div>
    <input type="submit" class="btn btn-info" value="Сохранить">
    <input type="reset" class="btn btn-warning" value="Сбросить">
</form>
