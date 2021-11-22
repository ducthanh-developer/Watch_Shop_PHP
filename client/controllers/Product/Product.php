<?php $VIEW = '../../views/product.php';
$catid = $_SESSION['catId'];
$productList = $products->selectByCategory($catid);
$category = $products->selectByIdCategory($catid);
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'priceASC': {
                $productList = $products->sortPriceASC($catid);
                break;
            }
        case 'priceDESC': {
                $productList = $products->sortPriceDESC($catid);
                break;
            }
        case 'lastest': {
                $productList = $products->sortDateLastest($catid);
                break;
            }
        default:
            break;
    }
}
if(isset($_POST['btnFilter'])){
    $minPrice = $_POST['minPrice'];
    $maxPrice = $_POST['maxPrice'];
    $productList = $products->filterPrice($catid, $minPrice, $maxPrice);
}

$totalRecord = $products -> getTotalRecord($catid);
$currentPage = isset($_GET['numPage']) ? $_GET['numPage'] : 1;
$limit = 5;
$totalPage = ceil($totalRecord/$limit);
$start = ($currentPage - 1) * $limit;

