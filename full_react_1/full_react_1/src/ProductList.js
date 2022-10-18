export default function ProductList() {
  let productList = [
    {
      id: 1,
      name: "apple",
      price: 10,
      image: "apple.jpg",
      description: "fresh apple",
    },
    {
      id: 1,
      name: "watermelon",
      price: 10,
      image: "watermelon.jpg",
      description: "fresh watermelon",
    },
    {
      id: 1,
      name: "mango",
      price: 10,
      image: "mango.jpg",
      description: "fresh mango",
    },
    {
      id: 1,
      name: "kiwi",
      price: 10,
      image: "kiwi.jpg",
      description: "fresh kiwi",
    },
  ];
  return (
    <div>
      <h1>Please Buy~~~</h1>
      <div>
        {productList.map((product) => {
          return (
            <div key={product.id}>
              <p>{product.name}</p>
              <p>{product.price}</p>
              <p>{product.image}</p>
              <p>{product.description}</p>
            </div>
          );
        })}
      </div>
    </div>
  );
}
