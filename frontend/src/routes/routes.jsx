import About from "../components/pages/About";
import Cart from "../components/pages/Cart";
import Checkout from "../components/pages/Checkout";
import Contact from "../components/pages/Contact";
import Home from "../components/pages/home/Home";
import Login from "../components/auth/Login";
import Profile from "../components/profile/Profile";
import ProfileOrder from "../components/profile/ProfileOrder";
import MyProducts from "../components/profile/MyProducts";
import Register from "../components/auth/Register";
import Sell from "../components/pages/Sell";
import Shop from "../components/pages/Shop";
import Wishlist from "../components/pages/Wishlist";
import Layout from "../components/common/Layout";
import ProductDetails from "../components/pages/ProductDetails";
import Thankyou from "../components/pages/Thankyou";
import Filter from "../components/pages/Filter";
import ForgotPassword from "../components/auth/ForgotPassword";


const routes = [
    {
      path: "/",
      element: <Layout />, 
      children: [
        { path: "/", element: <Home /> },
        { path: "/about", element: <About /> },
        { path: "/shop", element: <Shop /> },
        { path: "/cart", element: <Cart /> },
        { path: "/checkout", element: <Checkout /> },
        { path: "/contact", element: <Contact /> },
        { path: "/login", element: <Login /> },
        { path: "/register", element: <Register /> },
        {path: "/ForgotPassword", element: <ForgotPassword/>},
        { path: "/wishlist", element: <Wishlist /> },
        { path: "/profile", element: <Profile /> },
        { path: "/profileOrder", element: <ProfileOrder /> },
        { path: "/MyProducts", element: <MyProducts /> },
        { path: "/sell", element: <Sell /> },
        { path: "/product/:id", element: <ProductDetails /> },
        { path: "/thankyou", element: <Thankyou /> },
        {path: "/filter", element: <Filter />}
      ],
    },
  ];

export default routes;