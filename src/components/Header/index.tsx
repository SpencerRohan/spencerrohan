import { BsPostcardHeartFill } from "react-icons/bs";
import ChunkyButton from "../ChunkyButton";
import SiteDisclosure from "../SiteDisclosure";

const Header = () => {
  return (
    <header className="relative h-10 flex justify-end text-black mt-8 mr-8">
      <nav>
        <ul className="flex align-center gap-x-2">
          <li>
            <ChunkyButton role="link" href="#contact">
              <BsPostcardHeartFill size={30} className="p-1" />
              <span>Reach Out!</span>
            </ChunkyButton>
          </li>
          <li>
            <SiteDisclosure />
          </li>
        </ul>
      </nav>
    </header>
  );
};

export default Header;
