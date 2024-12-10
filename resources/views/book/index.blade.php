<x-test>
    <table>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Stock Saldo</th>
            <th></th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>
                    {{$book->title}}
                </td>
                <td>
                    {{$book->price}}
                </td>
                <td>
                    {{$book->stock_saldo}}
                </td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
           
        @endforeach
    </table>
</x-test>

</html>
