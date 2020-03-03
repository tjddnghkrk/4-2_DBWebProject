  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="shop_add_result.php" method="post" enctype="multipart/form-data">

      <table>
        <tr>
        <td> 상품 </td>
        <td> <input type=text name=name size=30> </td>
        </tr>

        <tr>
        <td> 설명 </td>
        <td> <input type=text name=comment size=50> </td>
        </tr>

        <tr>
        <td> 금액 </td>
        <td> <input type=text name=price size=10></td>
        </tr>

        <tr>
        <td> 분류 </td>
        <td> <select class="" name="classify">
        <option value="top">top</option>
        <option value="bottoms">bottoms</option>
        <option value="hats">hats</option>
        <option value="ect">ect</option>
      </select>

        </td>
        </tr>

        <tr>
        <td> 사진 </td>
        <td> <input type=file name=img size=10> </td>
        </tr>

        <tr>
        <td> <input type=submit value = "등록하기"> </td>
        <td> <input type="button" value="뒤로가기" onclick="location='adminpage.php'"></td>
        </tr>

      </form>
      </table>
  </body>
</html>
