"use server";
import Hexagon from "../Hexagon";
import HexagonGrid from "../HexagonGrid";
import { IconSet } from "./types";

type SkillGridProps = {
  iconSet: IconSet;
};

const SkillGrid = ({ iconSet }: SkillGridProps) => {
  return (
    <HexagonGrid>
      {Object.keys(iconSet).map((hexIcon) => {
        const Icon = iconSet[hexIcon].icon;
        return (
          <Hexagon key={hexIcon}>
            {/* <a href="/"> */}
            <Icon
              className="h-full w-full text-black"
              aria-label={iconSet[hexIcon].name}
              title={iconSet[hexIcon].name}
            />
            {/* </a> */}
          </Hexagon>
        );
      })}
    </HexagonGrid>
  );
};

export default SkillGrid;
