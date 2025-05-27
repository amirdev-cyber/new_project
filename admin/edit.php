<?php  
include("doc_db.php");

// Xatolik chiqmasligi uchun $_POST tekshiramiz
$id = isset($_POST['docmed']) ? $_POST['docmed'] : null;
$items = [];

if ($id !== null) {
    $request = "SELECT * FROM docmedd WHERE id='$id'";
    $news = $conn->query($request);

    if ($news && $news->num_rows > 0) {
        while ($row = $news->fetch_assoc()) {
            $items[] = $row;
        }
    }
}
$conn->close();
?>

<?php include('app/a_header.php'); ?>

<style>
.submit-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.submit-btn:hover {
    background-color: #45a049;
}
</style>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Yangiliklar</h1>
    <p class="mb-4">DataTables is a third party plugin. For more information, visit 
        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
    </p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ma'lumotlarni o'zgartirish</h6>
        </div>

        <?php if (!empty($items)): ?>
            <?php foreach($items as $item): ?>
            <form action="control.php" method="POST">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="mb-3">
                            <label for="name" class="form-label">Kim tomonidan</label>
                            <input type="text" name="author" value="<?= htmlspecialchars($item['author']) ?>" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="heading" class="form-label">Sarlavha</label>
                            <input type="text" name="subject" value="<?= htmlspecialchars($item['subject']) ?>" class="form-control" id="heading" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="information" class="form-label">Ma'lumot</label>
                            <textarea class="form-control" name="information" rows="3"><?= htmlspecialchars($item['news_body']) ?></textarea>
                        </div>
                        <div class="mb-4">
                            <input type="hidden" value="<?= $item['id'] ?>" name="docmed">
                            <button type="submit" class="submit-btn">Yuborish</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="card-body">
                <p class="text-danger">Ma'lumot topilmadi yoki noto'g'ri ID yuborildi.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- /.container-fluid -->
