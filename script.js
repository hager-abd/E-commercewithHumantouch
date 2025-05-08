let cart = [];
let total = 0;

function addToCart(name, price) {
  cart.push({ name, price });
  total += price;

  const cartItems = document.getElementById('cart-items');
  const newItem = document.createElement('li');
  newItem.textContent = `${name} - $${price}`;
  cartItems.appendChild(newItem);

  document.getElementById('cart-total').textContent = total.toFixed(2);
}
