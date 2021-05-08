<form action="{{ route('baiViet.store')}}" method="POST">
    @csrf
    <div>
        <label>Tieu de</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Noi dung</label><br>
        <textarea cols="25" rows="8" name="content"></textarea>
    </div>
    <button type="submit" value="submit">Dang bai</button>
</form>
