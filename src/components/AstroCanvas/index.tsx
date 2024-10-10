"use client";

import cn from "@/utils/cn";
import { Environment, Lightformer } from "@react-three/drei";
import { Canvas } from "@react-three/fiber";
import { Physics } from "@react-three/rapier";
import { useEffect, useRef, useState } from "react";
import AstroModel from "../AstroModel";

const AstroCanvas = () => {
  const [isTriggered, setIsTriggered] = useState(false);
  const canvasRef = useRef<HTMLDivElement | null>(null);
  const [isHovered, setIsHovered] = useState(false);
  const [isActive, setIsActive] = useState(false);

  const handleGrab = (active: boolean) => {
    setIsActive(active);
  };

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !isTriggered) {
            setIsTriggered(true);
          }
        });
      },
      { threshold: 0.5 }
    );

    if (canvasRef.current) {
      observer.observe(canvasRef.current);
    }

    return () => {
      if (canvasRef.current) {
        observer.unobserve(canvasRef.current);
      }
    };
  }, [isTriggered]);

  useEffect(() => {
    if (isActive) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }

    return () => {
      document.body.style.overflow = "";
    };
  }, [isActive]);

  return (
    <div ref={canvasRef} className="relative -mb-20 h-[450px]">
      <Canvas
        camera={{ position: [0, 0, 13], fov: 15 }}
        className={cn("relative", {
          "cursor-grab": isHovered && !isActive,
          "cursor-grabbing": isActive,
        })}
      >
        <ambientLight intensity={Math.PI} />
        {isTriggered && (
          <Physics interpolate gravity={[0, -40, 0]} timeStep={1 / 60}>
            <AstroModel
              onPointerOver={() => setIsHovered(true)}
              onPointerOut={() => setIsHovered(false)}
              handleGrab={handleGrab}
            />
          </Physics>
        )}
        <Environment background={false} blur={0.75}>
          <color attach="background" args={["#14242e"]} />
          <Lightformer
            intensity={2}
            color="white"
            position={[0, -1, 5]}
            rotation={[0, 0, Math.PI / 3]}
            scale={[100, 0.1, 1]}
          />
          <Lightformer
            intensity={13}
            color="#ff4f00"
            position={[-10, 0, 14]}
            rotation={[0, Math.PI / 2, Math.PI / 3]}
            scale={[100, 10, 1]}
          />
        </Environment>
      </Canvas>
    </div>
  );
};

export default AstroCanvas;
