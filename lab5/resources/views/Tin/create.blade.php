        <h1>Thêm Sản phầm</h1>
<form action="{{ route('tin.store') }}" method="POST" enctype="multipart/form-data" class="container mt-4">
    @csrf
    
    <label for="tenSanPham">Tiêu đề:</label>
    <input type="text" id="tenSanPham" name="tieuDe" class="form-control" required>
    
    <label for="moTa">Ngày đăng:</label>
    <input type="date" id="moTa" name="ngayDang" class="form-control" rows="4" required></input>
    
    <label for="gia">View:</label>
    <input type="number" id="gia" name="view" class="form-control" min="0" required>
    
    <label for="hinhAnh">Hình Ảnh:</label>
    <input type="text" id="hinhAnh" name="urlHinh" class="form-control"">
    
    {{-- <label for="danhMuc">Danh Mục:</label>
    <select id="danhMuc" name="danhMuc" class="form-control" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select> --}}
    
    <label for="soLuong">Nổi bật:</label>
    <input type="number" id="soLuong" name="noiBat" class="form-control" min="1" required>

    <label for="soLuong">Ẩn hiện</label>
    <input type="number" id="soLuong" name="anHien" class="form-control" min="1" required>


    <label for="soLuong">Tag:</label>
    <input type="number" id="soLuong" name="tags" class="form-control" min="1" required>
    
    <button type="submit" class="btn btn-primary mt-3">Thêm Sản Phẩm</button>
</form>
