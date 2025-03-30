<table class="table table-bordered table-striped mt-4">
    <h2>Bảng danh sách sản phẩm</h2>
    <a href="{{ route('tin.create') }}" class="btn btn-primary mb-3">Thêm mới</a>
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tiêu Đề</th>
            <th>Ngày Đăng</th>
            <th>URL Hình</th>
            <th>Danh Mục</th>
            <th>Lượt Xem</th>
            <th>Nổi Bật</th>
            <th>Ẩn/Hiện</th>
            <th>Tags</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tins as $tin)
        <tr>
            <td>{{ $tin->id }}</td>
            <td>{{ $tin->tieuDe }}</td>
            <td><a href="{{ $tin->urlHinh }}" target="_blank">Xem ảnh</a></td>
            <td>{{ $tin->idDM }}</td>
            <td>{{ $tin->view }}</td>
            <td>{{ $tin->noiBat ? 'Có' : 'Không' }}</td>
            <td>{{ $tin->anHien ? 'Hiện' : 'Ẩn' }}</td>
            <td>{{ $tin->tags }}</td>
            <td>
                <a href="" class="btn btn-warning btn-sm">Sửa</a>
                <form action="{{ route('tin.delete') }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $tin->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>