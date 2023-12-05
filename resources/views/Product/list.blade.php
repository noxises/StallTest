@extends('layouts.default')

@section("content")

    Sort by:
    <?php
    $symbol = '';
    if ($sortType) {
        $symbol = $dir == 'asc' ? '↑' : '↓';
    }
    ?>
    <a href="<?= ('/?sort=price&dir=' . ($dir == 'asc' ? 'desc' : 'asc')) ?>"
       style="color: #515184;">price<?php echo $sortType == 'price' ? ' ' . $symbol : '' ?></a> |
    <a href="<?= ('/?sort=created_at&dir=' . ($dir == 'asc' ? 'desc' : 'asc')) ?>"
       style="color: #515184;">date<?php echo $sortType == 'created_at' ? ' ' . $symbol : '' ?></a>

    <table>
        <thead>
        <tr>

            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Link</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product){ ?>
        <tr onclick="location.href = '/<?= $product->id ?>'"  style="cursor:pointer">

            <td><img src="<?= $product->image_url ?>" alt="" style="width:150px"></td>
            <td>{{ $product->title}}</td>

            <td>{{ $product->price}}</td>
            <td><a href="/<?= $product->id ?>">Buy</a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <script>
        function changeSort(type) {

        }
    </script>
@endsection
