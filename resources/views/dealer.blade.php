<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dealer managment system</title>
</head>
<body>
@if($layout == 'index')
    <div class="contener-fluid">
        <div class="row">
            <section class="col">
                @include("dealerslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="contener-fluid">
        <div class="row">
            <section class="col">
                @include("dealerslist")
            </section>
            <section class="col">
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
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="contener-fluid">
        <div class="row">
            <section class="col">
                @include("dealerslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="contener-fluid">
        <div class="row">
            <section class="col">
                @include("dealerslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@endif

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
