"use client";

import { ReactNode } from "react";

type HexagonGridProps = {
  children: ReactNode;
};

const HexagonGrid = ({ children }: HexagonGridProps) => {
  return (
    <ul className="text-center text-[0] grid grid-cols-8 grid-rows-3 gap-2 mb-2">
      {children}
    </ul>
  );
};

export default HexagonGrid;
