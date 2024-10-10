"use client";

import cn from "@/utils/cn";
import { useEffect, useRef, useState } from "react";
import { FaMapSigns } from "react-icons/fa";
import ChunkyButton from "../ChunkyButton";

type SiteDisclosureProps = {
  className?: string;
};

const SiteDisclosure = ({ className }: SiteDisclosureProps) => {
  const [isOpen, setIsOpen] = useState(false);
  const disclosureRef = useRef<HTMLDivElement>(null);

  const toggleDisclosure = () => {
    setIsOpen(!isOpen);
  };

  const handleClickOutside = (event: MouseEvent) => {
    if (
      disclosureRef.current &&
      !disclosureRef.current.contains(event.target as Node)
    ) {
      setIsOpen(false);
    }
  };

  useEffect(() => {
    if (isOpen) {
      document.addEventListener("mousedown", handleClickOutside);
    } else {
      document.removeEventListener("mousedown", handleClickOutside);
    }
    return () => {
      document.removeEventListener("mousedown", handleClickOutside);
    };
  }, [isOpen]);

  return (
    <div className="relative" ref={disclosureRef}>
      <ChunkyButton
        onClick={toggleDisclosure}
        aria-expanded={isOpen}
        className={cn("px-2 md:px-2", className)}
      >
        <FaMapSigns size={40} className="p-1" />
      </ChunkyButton>
      {isOpen && (
        <nav className="absolute top-full right-0 mt-2 bg-[#fbeee0] border-2 border-[#422800] shadow-[4px_4px_0_0_#422800] z-10">
          <ul className="min-w-[200px]">
            <li className="border-b border-[#422800] last:border-none">
              <a
                href="/experience"
                className="block w-full p-4 hover:bg-[#fddbb7]"
              >
                Experience
              </a>
            </li>
            <li className="border-b border-[#422800] last:border-none">
              <a
                href="/projects"
                className="block w-full p-4 hover:bg-[#fddbb7]"
              >
                Projects
              </a>
            </li>
            <li>
              <a href="/docs" className="block w-full p-4 hover:bg-[#fddbb7]">
                Docs
              </a>
            </li>
          </ul>
        </nav>
      )}
    </div>
  );
};

export default SiteDisclosure;
