"use client";

import styles from "./styles.module.css";

type HexagonProps = {
  children: React.ReactNode;
};

const Hexagon = ({ children }: HexagonProps) => {
  return (
    <li
      className={`${styles.hex} [&:nth-child(1)]:col-start-2 [&:nth-child(8)]:col-start-2 col-span-2`}
    >
      {children}
    </li>
  );
};

export default Hexagon;
