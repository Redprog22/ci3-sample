<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>메모장</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 0 20px; }
        h1 { font-size: 1.5rem; border-bottom: 2px solid #333; padding-bottom: 10px; }
        form { display: flex; gap: 8px; margin-bottom: 24px; }
        input[type=text] { flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 1rem; }
        button { padding: 8px 16px; background: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #555; }
        ul { list-style: none; padding: 0; }
        li { display: flex; justify-content: space-between; align-items: center; padding: 12px; border-bottom: 1px solid #eee; }
        li span { color: #888; font-size: 0.85rem; margin-left: 8px; }
        a.del { color: #e00; text-decoration: none; font-size: 0.85rem; }
        a.del:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>📝 메모장</h1>

    <form action="/memo/add" method="post">
        <input type="text" name="content" placeholder="메모를 입력하세요" required>
        <button type="submit">추가</button>
    </form>

    <ul>
        <?php foreach ($memos as $memo): ?>
        <li>
            <div>
                <?= htmlspecialchars($memo->content) ?>
                <span><?= $memo->created_at ?></span>
            </div>
            <a class="del" href="/memo/delete/<?= $memo->id ?>">삭제</a>
        </li>
        <?php endforeach; ?>
        <?php if (empty($memos)): ?>
        <li>메모가 없습니다.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
