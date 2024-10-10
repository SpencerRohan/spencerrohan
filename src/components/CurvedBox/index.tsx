"use client";

import cn from "@/utils/cn";
import { ReactNode } from "react";
import styles from "./styles.module.css";

type CurvedBoxProps = {
  children: ReactNode;
  className?: string;
};

const CurvedBox = ({ children, className }: CurvedBoxProps) => {
  return (
    <div
      className={cn(
        styles["shadow-lifted"],
        "p-5 border-black border-solid",
        className
      )}
    >
      {children}
    </div>
  );
};

export default CurvedBox;
