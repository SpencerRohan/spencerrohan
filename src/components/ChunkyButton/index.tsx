import cn from "@/utils/cn";
import { ReactNode } from "react";

type ChunkyButtonProps = {
  children: ReactNode;
  className?: string;
  href?: string;
} & React.ButtonHTMLAttributes<HTMLButtonElement> &
  React.AnchorHTMLAttributes<HTMLAnchorElement>;

const ChunkyButton = ({
  className,
  children,
  href,
  ...props
}: ChunkyButtonProps) => {
  const Tag = href ? "a" : "button";
  return (
    <Tag
      role={href ? "link" : "button"}
      href={href ?? undefined}
      {...props}
      className={cn(
        "bg-[#fbeee0] border-2 border-[#422800] rounded-md  shadow-[4px_4px_0_0_#422800] text-[#422800] cursor-pointer font-semibold text-lg px-4 md:px-6 leading-[40px] text-center select-none hover:bg-white active:shadow-[2px_2px_0_0_#422800] active:translate-x-[2px] active:translate-y-[2px] inline-flex items-center",
        className
      )}
    >
      {children}
    </Tag>
  );
};

export default ChunkyButton;
